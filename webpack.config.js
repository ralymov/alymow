const path = require('path');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const imageminMozjpeg = require('imagemin-mozjpeg');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
  entry: [
    path.resolve(__dirname, 'src/js/index.js'),
    path.resolve(__dirname, 'src/scss/style.scss'),
  ],
  output: {
    filename: 'bundle.js'
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
          MiniCssExtractPlugin.loader,
          "css-loader",
          "sass-loader"
        ]
      },
      {
        test: /\.(png|jpg|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'img',
              name: '[name].[ext]',
            },
          },
        ],
      },
      {
        test: /\.(eot|ttf|svg|woff|woff2)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              outputPath: 'fonts',
              name: '[name].[ext]',
            },
          },
        ],
      },
    ]
  },
  plugins: [
    new CleanWebpackPlugin(
      ['dist'], {verbose: true, dry: false}
    ),
    new MiniCssExtractPlugin({
      filename: "style.css",
    }),
    new HtmlWebpackPlugin({
      inject: false,
      hash: true,
      template: './src/html/index-ru.html',
      filename: 'index.html'
    }),
    new CopyWebpackPlugin([
      {
        from: './src/scripts/mail.php',
        to: './'
      },
      {
        from: './.env',
        to: './'
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
    new ImageminPlugin({
      test: /\.(jpe?g|png|gif|svg)$/i,
      pngquant: {
        quality: '80-90'
      },
      plugins: [imageminMozjpeg({quality: '70'})]
    }),
    //new BundleAnalyzerPlugin(),
  ],
  optimization: {
    minimizer: [
      new UglifyJsPlugin({
        cache: true,
        parallel: true,
        sourceMap: true
      }),
      new OptimizeCSSAssetsPlugin({})
    ]
  },
};
