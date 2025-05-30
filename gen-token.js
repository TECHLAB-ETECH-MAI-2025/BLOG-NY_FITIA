const jwt = require('jsonwebtoken');

const secret = "8137a014e861c92a02da672c39b7ff608d8caebd7a7b965ce20fbb46bd39f579";

const payload = {
  mercure: {
    publish: ["*"]
  }
};

const token = jwt.sign(payload, secret, { algorithm: 'HS256' });

console.log(token);
