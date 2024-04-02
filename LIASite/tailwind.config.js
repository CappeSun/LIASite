/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      extend: {
          postition: ["sticky"],
          colors: {
            yrgoRed: 'var(--yrgo-red)',
            marine1: 'var(--marine1)',
            marine2: 'var(--marine2)',
            marine3: 'var(--marine3)',
            marine4: 'var(--marine4)',
            text1: 'var(--text1)',
        },
      },
  },
  plugins: [],
};


