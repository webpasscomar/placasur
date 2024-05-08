// vite.config.js
import { defineConfig } from "file:///C:/laragon/www/placasur/node_modules/vite/dist/node/index.js";
import laravel from "file:///C:/laragon/www/placasur/node_modules/laravel-vite-plugin/dist/index.mjs";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/sass/app.scss",
        // 'public/fontawesome/css/all.css',
        // 'public/fontawesome/css/fontawesome.css',
        // 'public/fontawesome/css/brands.css',
        // 'public/fontawesome/css/solid.css',
        // 'public/css/custom.css',
        "resources/js/app.js"
        // 'public/js/jquery.min.js',
        // 'public/js/bootstrap.bundle.min.js'
      ],
      refresh: true
    })
  ]
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJDOlxcXFxsYXJhZ29uXFxcXHd3d1xcXFxwbGFjYXN1clwiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiQzpcXFxcbGFyYWdvblxcXFx3d3dcXFxccGxhY2FzdXJcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0M6L2xhcmFnb24vd3d3L3BsYWNhc3VyL3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3MnLFxuICAgICAgICAgICAgICAgIC8vICdwdWJsaWMvZm9udGF3ZXNvbWUvY3NzL2FsbC5jc3MnLFxuICAgICAgICAgICAgICAgIC8vICdwdWJsaWMvZm9udGF3ZXNvbWUvY3NzL2ZvbnRhd2Vzb21lLmNzcycsXG4gICAgICAgICAgICAgICAgLy8gJ3B1YmxpYy9mb250YXdlc29tZS9jc3MvYnJhbmRzLmNzcycsXG4gICAgICAgICAgICAgICAgLy8gJ3B1YmxpYy9mb250YXdlc29tZS9jc3Mvc29saWQuY3NzJyxcbiAgICAgICAgICAgICAgICAvLyAncHVibGljL2Nzcy9jdXN0b20uY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICAgICAgLy8gJ3B1YmxpYy9qcy9qcXVlcnkubWluLmpzJyxcbiAgICAgICAgICAgICAgICAvLyAncHVibGljL2pzL2Jvb3RzdHJhcC5idW5kbGUubWluLmpzJ1xuICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgIH0pLFxuICAgIF0sXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBK1AsU0FBUyxvQkFBb0I7QUFDNVIsT0FBTyxhQUFhO0FBRXBCLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFNBQVM7QUFBQSxJQUNMLFFBQVE7QUFBQSxNQUNKLE9BQU87QUFBQSxRQUNIO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBLFFBTUE7QUFBQTtBQUFBO0FBQUEsTUFHSjtBQUFBLE1BQ0EsU0FBUztBQUFBLElBQ2IsQ0FBQztBQUFBLEVBQ0w7QUFDSixDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=
