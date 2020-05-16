module.exports = {
    css: {
        loaderOptions: {
            sass: {
                prependData: ' @import "@/assets/scss/variable.scss"; '
            }
        }
    },
    publicPath: "./",
    outputDir: '../public',
    indexPath:
        process.env.NODE_ENV === 'production'
            ? '../resources/views/index.blade.php'
            : 'index.html'
};
