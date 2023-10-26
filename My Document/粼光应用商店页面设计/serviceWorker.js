var cacheName = 'V2Beta7.1 v51';
var appShellFiles = [
    '/',
    '/index.html',
    '/index.js',
    '/favicon.ico',
    '/favicon-16x16.png',
    '/favicon-32x32.png',
    '/images/drawerHeader.png'
]
this.addEventListener('install', function (event) {
    console.log('[Service Worker] Install', event);
    event.waitUntil(
        caches.open(cacheName).then(function (cache) {
            console.log('[Service Worker] Caching all: app shell and content');
            return cache.addAll(appShellFiles);
        })
    );
});

this.addEventListener('fetch', function (event) {
    event.respondWith(
        caches.match(event.request).then(function (r) {
            console.log('[Service Worker] Fetching resource: ' + event.request.url);
            return r || fetch(event.request)
        })
    );
});

this.addEventListener('activate', function (event) {
    event.waitUntil(
        Promise.all([
            // 更新客户端
            self.clients.claim(),

            // 清理旧版本
            caches.keys().then(function (cacheList) {
                return Promise.all(
                    cacheList.map(function (oldCacheName) {
                        if (oldCacheName !== cacheName) {
                            return caches.delete(oldCacheName);
                        }
                    })
                );
            })
        ])
    );
});