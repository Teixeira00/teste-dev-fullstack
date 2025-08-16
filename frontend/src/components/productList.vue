<template>
  <div class="product" v-for="product in products" :key="product.id">
    <div class="info">
      <strong class="name">{{ product.nome }}</strong>
      <div class="description">{{ product.descricao }}</div>
    </div>
    <div class="price">R$ {{ Number(product.preco).toFixed(2) }}</div>
    <div class="buttons">
      <button @click="$emit('edit', product)">Editar</button>
      <button @click="$emit('delete', product.id)">Excluir</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ['products'],
  emits: ['edit', 'delete']
}
</script>

<style scoped>
.product {
  display: flex;
  justify-content:space-between;
  align-items: center;
  padding: 14px;
  margin-bottom: 12px;
  border: 1px solid #ccc;
  border-radius: 6px;
}

.info {
  display: flex;
  flex-direction: column;
  width: 300px;
}

.name {
  font-size: 16px;
  font-weight: bold;
}

.description {
  font-size: 14px;
  color: #555;
  margin-top: 4px;
}

.price{
  font-size: 16px;
}

.buttons {
  display: flex;
  gap: 8px;
}

button {
  padding: 6px 12px;
}
</style>
