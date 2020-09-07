// module.exports = {
//   env: 'drupal',
//   port: 8888,
//   webpackDevServer: {
//     enabled: true,
//   },
//   buildDir: './www/build',
//   dataDir: './www/build/data',
//   wwwDir: './www/build',
//   publicPath: '/themes/s3v/www/build/',
//   components: {
//     global: [
//       '@bolt/global',
//       '@bolt/components-button',
//       '@bolt/components-card',
//     ],
//     individual: [
//     ],
//   },
// };

module.exports = {
  env: 'drupal',
  verbosity: 1,
  webpackDevServer: {
    enabled: true,
  },
  buildDir: './dist',
  dataDir: './dist/data',
  wwwDir: './dist',
  publicPath: '/themes/s3v/dist/',
  components: {
    global: [
      '@bolt/global',
      '@bolt/components-button',
      '@bolt/components-headline',
      '@bolt/components-link',
      '@bolt/components-icon',
      '@bolt/components-navbar',
      '@bolt/components-sticky',
    ],
    individual: [
      // example specifying a standalone component's CSS and JS individually
      // {
      //   name: 'bolt-theme',
      //   scss: ./src/index.scss',
      //   js: './src/index.js',
      // },
    ],
  },
};
