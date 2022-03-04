const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
// const TerserPlugin = require('terser-webpack-plugin');
// const HtmlWebpackPlugin = require('html-webpack-plugin');

module.exports = {
    // mode: 'production',
    entry: './index.js',
    output: {
      filename: '[name].[contenthash].js', // this line is the only difference
      path: path.resolve(__dirname, '../dist')
    },
    plugins: [
      new CleanWebpackPlugin(),
    //   new HtmlWebpackPlugin({
    //     filename: 'car.html',
    //     inject: true,
    //     template: path.resolve(__dirname, 'dist', 'car.html'),
    //   }),
    ],
    module: {
      rules: [
        {
          test: /\.(js|jsx)$/,
          exclude: /[\\/]node_modules[\\/]/,
          use: {
            loader: 'babel-loader',
          },
        },
        {
            test: /\.css$/,
            use: [
              MiniCssExtractPlugin.loader,
              'css-loader',
            ],
        }
      ],
      
    },
    plugins: [
        new MiniCssExtractPlugin({
          filename: '[name].[contenthash].css',
        }),
      ],
      optimization: {
        minimizer: [
            `...`,
          new OptimizeCssAssetsPlugin()
        //   new TerserPlugin({
        //     // Use multi-process parallel running to improve the build speed
        //     // Default number of concurrent runs: os.cpus().length - 1
        //     parallel: true,
        //     // Enable file caching
        //     cache: true,
        //     sourceMap: true,
        //   }),
        ],
      },
  };