/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.php',
        './assets/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                neon: {
                    lime: '#D7F207',
                    cyan: '#F2EDA2',
                    magenta: '#F2F2F2',
                    green: '#F2EA79',
                },
                dark: {
                    900: '#0D0D0D',
                    800: '#141414',
                    700: '#1a1a1a',
                    600: '#262626',
                }
            },
            fontFamily: {
                orbitron: ['Orbitron', 'sans-serif'],
                inter: ['Inter', 'sans-serif'],
            },
            animation: {
                'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'spin-slow': 'spin 3s linear infinite',
                'bounce-slow': 'bounce 2s infinite',
            },
            backdropBlur: {
                xs: '2px',
            },
            boxShadow: {
                'neon': '0 0 20px rgba(215, 242, 7, 0.3)',
                'neon-strong': '0 0 40px rgba(215, 242, 7, 0.5)',
                'glass': '0 8px 32px rgba(13, 13, 13, 0.3)',
            },
        },
    },
    plugins: [],
}
