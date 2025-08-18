<template>

  <div class="container">
    <h1>Lista Estoque NM</h1>

    <div class="top-bar">
      <button @click="openAddModal">ADD Produto</button>
      <input v-model="search" placeholder="Filtrar pelo nome..." />
    </div>

    <ProductList
      :products="filteredProducts"
      @edit="openEditModal"
      @delete="deleteProduct"
    />

    <!-- Usa o modal externo (POPUP) -->
    <ProductModal
      :visible="showModal"
      :product="newProduct"
      :isEditing="isEditing"
      @save="saveProduct"
      @close="closeModal"
    />
  </div>

</template>

<script setup>
import { ref, computed } from 'vue'
import axios from 'axios'
import ProductList from './components/ProductList.vue'
import ProductModal from './components/ProductModal.vue'

const products = ref([])

axios.get('http://127.0.0.1:8000/api/produtos')
  .then(response => {
    products.value = response.data
  })

const search = ref('')
const showModal = ref(false)
const isEditing = ref(false)
const editedProductId = ref(null)

const newProduct = ref({
  nome: '',
  descricao: '',
  preco: null,
})

const filteredProducts = computed(() =>
  products.value.filter(p =>
    p.nome.toLowerCase().includes(search.value.toLowerCase())
  )
)

function openAddModal() {
  isEditing.value = false
  showModal.value = true
  newProduct.value = { nome: '', descricao: '', preco: null }
}

function openEditModal(product) {
  isEditing.value = true
  showModal.value = true
  editedProductId.value = product.id
  newProduct.value = { ...product }
}

function closeModal() {
  showModal.value = false
  newProduct.value = { nome: '', descricao: '', preco: null }
  editedProductId.value = null
}

function saveProduct(product) {
  const token = 'senha123'

  if (isEditing.value) {
    axios.put(
      `http://127.0.0.1:8000/api/produtos/${editedProductId.value}`,
      product,
      {
        headers: {
          'X-API-KEY': token
        }
      }
    ).then(response => {
      const index = products.value.findIndex(p => p.id === editedProductId.value)
      products.value[index] = response.data
      closeModal()
    })
  } else {
    axios.post(
      'http://127.0.0.1:8000/api/produtos',
      product,
      {
        headers: {
          'X-API-KEY': token
        }
      }
    ).then(response => {
      products.value.push(response.data)
      closeModal()
    })
  }
}

function deleteProduct(id) {
  const token = 'senha123'

  axios.delete(`http://127.0.0.1:8000/api/produtos/${id}`, {
    headers: { 'X-API-KEY': token }
  }).then(() => {
    products.value = products.value.filter(p => p.id !== id)
  })
}
</script>

<style scoped>

.container {
  max-width: 700px;
  margin: auto;
  padding: 20px;
  font-family: sans-serif; 
}

h1 {
  text-align: center;
}

.top-bar {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.top-bar button {
  padding: 8px 12px;
}

.top-bar input {
  flex: 1;
  margin-left: 10px;
  padding: 8px;
}
</style>
