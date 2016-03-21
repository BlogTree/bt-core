/**
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * MIT Public License for more details.
 *
 * Copyright (c) 2016 (original work) Blog-Tree.com;
 */

var debug = process.env.NODE_ENV !== "production";
var webpack = require('webpack');

module.exports = {
    context: __dirname + "/src",
    devtool: debug ? "inline-sourcemap" : null,
    entry: "./js/client.js",
    devServer: {
        noInfo: false,
        inline: true
    },
    module: {
        loaders: [
            {
                test: /\.js?$/,
                exclude: /(node_modules|bower_components)/,
                loader: 'babel-loader',
                query: {
                    presets: ['react', 'es2015', 'stage-0'],
                    plugins: ['react-html-attrs', 'transform-class-properties', 'transform-decorators-legacy']
                }
            }
        ]
    },
    output: {
        path: __dirname + "/src/",
        filename: "client.min.js"
    },
    plugins: debug ? [] : [
        new webpack.optimize.DedupePlugin(),
        new webpack.optimize.OccurenceOrderPlugin(),
        new webpack.optimize.UglifyJsPlugin({ mangle: false, sourcemap: false })
    ]
};
