const webpack = require('webpack');
const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');


process.env.Node_ENV = 'developement';

module.exports = {
    mode: 'development',
    target: 'web',
    devTool: 'cheap-module-source-map',
    entry: './src/index',
    output: {
        path:path.resolve(_dirname,"build"),
        publicPath: '/',
        filename: 'bundle.js'
    },
    devserver:{
        stats: 'minimal',
        overlay: 'true',
        historyApiFallback: 'true',
        disableHostCheck: 'true',
        headers: {"Access-Control-Allow-Origin": "*"};
        https: false
    },
    plugins: [
        new HtmlWebpackPlugin({
            template: "src/index.html",
            favicon: "src/favicon.ico"
        })
    ],
    module: {
        rules : [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: ["babel-loader"]
            },
            {
                test: /(\.css)$/,
                use: ["style-loader","css-loader"]
            }
        ]
    }
};