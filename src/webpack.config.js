var path = require('path');
var themeLocation = '../public/wp-content/themes/wickandmortar';
var sourceLocation = './dev/assets/js';


module.exports = {
	entry: sourceLocation + "/scripts.js",
	output:{
		path:path.resolve(__dirname,themeLocation + "/assets/js/"),
		filename: "app.js"
	},

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  mode: 'development'

	
}