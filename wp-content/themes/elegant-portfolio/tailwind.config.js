/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",  // Inclut tous les fichiers PHP à la racine de ton thème
    "./templates/**/*.php",  // Si tu as des sous-dossiers avec des templates PHP
    "./wp-content/themes/elegant-portfolio/**/*.js",  // Si tu utilises des fichiers JS dans ton thème
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
