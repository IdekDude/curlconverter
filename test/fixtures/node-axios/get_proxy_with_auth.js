const axios = require('axios');

const response = await axios.get('http://localhost:28139', {
  proxy: {
    protocol: 'http',
    host: 'localhost',
    port: 8080,
    auth: {
      user: 'anonymous',
      password: 'anonymous'
    }
  }
});
