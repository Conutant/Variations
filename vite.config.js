import { defineConfig } from 'vite'

// https://vitejs.dev/config/
export default defineConfig({
  build: {
    watch: {
      include: 'src/**'
    },
    rollupOptions: {
      input: {
        woocommerce: '/src/woocommerce/main.js',
      },
      output: {
        dir: 'assets/woocommerce/',
        entryFileNames: 'index.js',
        assetFileNames: 'index.css'
      }  
    }
  }
});