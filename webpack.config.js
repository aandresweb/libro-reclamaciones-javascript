
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
    entry: './src/js/app.js',
    output: {
        path: __dirname + '/',
        filename: 'bundle.js' 
    },
    plugins : [
        new HtmlWebpackPlugin({
            template: './src/index.html',
        })
    ],
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    {loader: "style-loader"},
                    {loader: "css-loader"}
                ],
            },
        ],
    },
}