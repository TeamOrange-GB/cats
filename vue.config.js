module.exports = {
    css: {
        loaderOptions: {
            sass: {
                prependData: ' @import "@/assets/scss/variable.scss"; '
            }
        }
    },
    publicPath: "./"
};