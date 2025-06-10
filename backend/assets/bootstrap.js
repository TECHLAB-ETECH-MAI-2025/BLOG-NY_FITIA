// assets/bootstrap.js
import { startStimulusApp } from '@symfony/stimulus-bridge';

const app = startStimulusApp(require.context('./controllers', true, /\.js$/));

// Optionnel : tu peux enregistrer manuellement tes contrôleurs ici
// app.register('hello', HelloController);
