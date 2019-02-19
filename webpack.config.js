const path = require('path');
const webpack = require('webpack');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const imageminMozjpeg = require('imagemin-mozjpeg');

module.exports = {
  plugins: [
    new CopyWebpackPlugin([
      {
        from: 'resources/images',
        to: 'images'
      },
      {
        from: 'resources/favicon',
        to: 'favicon'
      },
      {
        from: 'resources/uploads',
        to: 'uploads'
      },
    ]),
    new ImageminPlugin({
      test: /\.(jpe?g|png|gif|svg)$/i,
      pngquant: {
        quality: '80-90'
      },
      plugins: [imageminMozjpeg({quality: '70'})]
    }),
  ]
};