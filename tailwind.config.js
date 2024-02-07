module.exports = {
  safelist: [
    '!duration-[0ms]',
    '!delay-[0ms]',
    'html.js :where([class*="taos:"]:not(.taos-init))'
  ],
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js",
    ],
    relative: true,
    transform: (content) => content.replace(/taos:/g, ''),
    files: ['./src/*.{html,js}'],
    
    theme: {
      extend: {
        fontFamily: {
          Mont: 'Montserrat',
          Pops: 'Poppins'
        }
      },
    },
    plugins: [
        require('flowbite/plugin'),
        require('taos/plugin')
    ],
  }
