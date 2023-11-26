/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.php",
        "./torah/*.php",
        "./prophetes/*.php",
        "./hagiographes/*.php"
    ],
  theme: {
    extend: {
        fontSize: {
            clampSm: "clamp(0.8rem, 0.42vw + 0.69rem, 1.03rem)",
            clampBase: "clamp(1rem, 0.68vw + 0.83rem, 1.38rem)",
            clampMd: "clamp(1.25rem, 1.06vw + 0.99rem, 1.83rem)",
            clampLg: "clamp(1.56rem, 1.6vw + 1.16rem, 2.44rem)",
        },
        spacing: {
            clamp: "clamp(1rem, 1.06vw + 0.99rem, 2rem)"
        }
    },
  },
  plugins: [],
}

