const jwt = require('jsonwebtoken');

const secret = 'b96dd4a37e49a3970e77bc59299b50dade08e7d883535eff7781a2c61a771fd8';

const token = jwt.sign({
  mercure: {
    publish: ['*']
  }
}, secret, { algorithm: 'HS256' });

console.log(token);
