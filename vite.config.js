import { defineConfig } from 'vite';

export default defineConfig({
  server: {
    hmr: {
      overlay: false
    }
  },
  resolve: {
    alias: {
      'bootstrap': 'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
    }
  }
});
