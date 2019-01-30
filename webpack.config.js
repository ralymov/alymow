const webpack = require('path');
const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: [
    path.resolve(__dirname, 'src/js/index.js'),
    path.resolve(__dirname, 'src/scss/style.scss'),
  ],
  output: {
    filename: './js/bundle.js'
  },
  devtool: "source-map",
  module: {
    rules: [
      {
        test: /\.js$/,
        include: path.resolve(__dirname, 'src/js'),
        use: {
          loader: 'babel-loader',
          options: {
            presets: 'env'
          }
        }
      },
      {
        test: /\.scss$/,
        use: [
          "style-loader",
          "css-loader",
          "sass-loader"
        ]
      }
    ]
  },
  plugins: [
    new HtmlWebpackPlugin({
      inject: false,
      hash: true,
      template: path.resolve(__dirname, 'src/html/alymow-ru.html'),
      filename: 'html/index.html'
    }),
    new CopyWebpackPlugin([{
      from: './src/fonts',
      to: './fonts'
    },
      {
        from: './src/favicon',
        to: './favicon'
      },
      {
        from: './src/img',
        to: './img'
      },
      {
        from: './src/uploads',
        to: './uploads'
      }
    ]),
  ],
};