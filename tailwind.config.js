module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'hero': "url('img/Hero_Keren.jpg')",
                'pattern': "url('img/pattern-1.jpg')",
                'kti': "url('img/kti_ilus.jpg')",
                'poster': "url(img/poster_ilus.jpg)",
                'logo': "url(img/logo_fanatik.png)",
                'logo_pnl': "url(img/Logo_Politeknik_Negeri_Lhokseumawe.png)",
                'logo_himatik': "url(img/logo_himatik.png)",
                'logo_tik': "url(img/logo_tik.jpg)",
                'olimpiade': "url(img/olimpiade_ilus.jpg)",
                'photo': "url(img/photography_ilus.jpg)",
                'video': "url(img/video_ilus.jpg)",
                'web': "url(img/web_ilus.jpg)",
                'user': "url(img/user.png)",
                'typing': "url(img/typing_ilus.png)",
                'wa': "url(img/WhatsApp.png)"
            }
        },
    },
    plugins: [
        require('tw-elements/dist/plugin')
    ],
}
