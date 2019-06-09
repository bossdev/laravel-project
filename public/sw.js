var CACHE_NAME = 'dog-cache-v1';
var urlsToCache = [
  'js/app.js',
  'css/all.css',
  'css/app.css',
  'css/responsive.css',
  'images/palm.png',
];

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request)
        .then(function(response) {
            console.log("Cache hit - return response");
            console.log(response);
            if (response) {
                return response;
            }
            console.log(event.request);
            return fetch(event.request);
        }
        )
    );
});