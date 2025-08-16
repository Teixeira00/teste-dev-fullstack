<template>
  <div class="modal-overlay" v-if="visible" @click.self="close">
    <div class="modal-card">
      <h2>{{ isEditing ? 'Editar Produto' : 'Adicionar Produto' }}</h2>

      <form @submit.prevent="submitForm">
        <label>
          Nome:
          <input v-model="localProduct.nome" required />
        </label>

        <label>
          Descrição:
          <input v-model="localProduct.descricao" />
        </label>

        <label>
          Preço:
          <input v-model.number="localProduct.preco" type="number" step="0.01" required />
        </label>

        <div class="buttons">
          <button type="submit">Salvar</button>
          <button type="button" @click="close">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProductModal',
  props: {
    visible: { type: Boolean, required: true },
    product: {
      type: Object,
      default: () => ({ nome: '', descricao: '', preco: null })
    },
    isEditing: { type: Boolean, required: true }
  },
  data() {
    return {
      // Fazemos uma cópia local para editar sem alterar diretamente o prop
      localProduct: { ...this.product }
    }
  },
  watch: {
    // Atualiza localProduct sempre que product muda (ex: abrir modal com produto novo)
    product(newVal) {
      this.localProduct = { ...newVal }
    }
  },
  methods: {
    submitForm() {
      // Emite o evento com os dados do produto local
      this.$emit('save', this.localProduct)
    },
    close() {
      this.$emit('close')
    }
  }
}
</script>

<style scoped>
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
}

.modal-card {
  background: white;
  padding: 24px;
  border-radius: 8px;
  width: 100%;
  max-width: 500px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.modal-card label {
  display: block;
  margin: 10px 0;
}

.modal-card input {
  width: 100%;
  padding: 6px;
  box-sizing: border-box;
}

.buttons {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 20px;
}

.buttons button {
  padding: 6px 12px;
}
</style>
