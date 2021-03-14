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
    }
}