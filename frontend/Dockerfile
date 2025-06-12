# Étape 1 : Build du projet React
FROM node:20-alpine AS builder

# Créer un dossier de travail
WORKDIR /app

# Copier les fichiers nécessaires
COPY package*.json ./
RUN npm install

# Copier le reste du code
COPY . .

# Compiler le projet Vite en production
RUN npm run build

# Étape 2 : Servir avec nginx
FROM nginx:alpine

# Copier la configuration nginx (si tu veux customiser) ou utiliser par défaut
COPY --from=builder /app/dist /usr/share/nginx/html

# Exposer le port 5173 (ou 80 si tu veux en prod)
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
