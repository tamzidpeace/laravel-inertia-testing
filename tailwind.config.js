/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        cLimadiTopBar: '#F89818',
        cBrand: '#F89818',
        cBgSideBar: '#FFFAF2',
        cBgSelectedSideBar: '#FFF1DF',
        cSidebarDarkBg: "#1F2937",
        cBrandColor2: "#FFFFFF",
        cTextGray: "#787878",
        cBgLayout: "#EEEEEE",
        cMainBlue: "#2257AA",
        cMainWhite: '#FFFFFF',
        cCommonListBG: "#D3E5FF",
        cCommonListIconColor: "#A3B7D5",
        cMainBlack: "#0E1826",
        cSecondaryTextColor: "#333333",
        cRed: "#FF6368",
        cDisable: '#89919E',
        cTextButtonHover: '#D1D5DB',
        cLightSkyBlue: "#96C0FF",
        cCustomerBlack: " #0E1826",
        cGrey: "#89919E",
        cFloralWhite: '#FFFAF2',
        cLightGrayishBlue: '#D1D5DB',
        cBackground: "#e2e2e2",
      }
    },
  },
  plugins: [require('flowbite/plugin')],
}

