module.exports = {

  devServer: {
      proxy: 'http://bti'
  },

  chainWebpack: config => {
      config
          .plugin('html')
          .tap(args => {
              args[0].title = 'Бюро технічної інвентаризації'
              return args
          })
  },

  outputDir: '../public',

  indexPath: process.env.NODE_ENV === 'production'
      ? '../resources/views/welcome.blade.php'
      : 'index.html'
}