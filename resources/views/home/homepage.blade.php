 <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Chikker</title>
</head>
<body>
  <main>
    <div class="flex content-center">
      <div>
        <img class="rounded-r-full w-16"  src="{{ Vite::asset('public/images/logo.jpg') }}" alt="Logo">
      </div>
      <div class="pt-2 relative mx-auto text-gray-600">
        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
          type="search" name="search" placeholder="Search">
        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
          <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
              d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
          </svg>
        </button>
      </div>
    </div>
    <div class="relative my-5 mx-5 content-center">
      <!-- top navbar -->
      <div class="sticky bottom-0 left-0 bg-white w-full py-2 px-3 mt-1 text-xs">
        
        <div class="grid grid-cols-5 gap-0.5 mt-2 pb-5">
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://sf-tk-sg.ibytedtos.com/obj/tiktok-web-sg/tt-sg-article-cover-351970d5103b996fbe9ddc67f6d668cc.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://i.pinimg.com/originals/05/d3/80/05d38056f155a2e852691a62546413cf.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://cdn.acidcow.com/pics/20190628/gifs_14.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://www.allkpop.com/upload/2021/06/comment/260124/1624685055-tumblr-72b06bab00d71145f9900a3bdd40a288-e6d20803-500.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://media0.giphy.com/media/5tujxS8BprYWkDzjXM/giphy.gif?cid=790b7611f58c0b916eb59574df025c7ca891a396c6176d14&rid=giphy.gif&ct=g');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://i.pinimg.com/originals/a7/9e/bb/a79ebb256a2e8b450f6d29d813a538bf.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://media3.giphy.com/media/daOQ5lE52dUhgD8acn/giphy.gif?cid=790b7611359354d7bdfe94465e3f7a6dc892e92e85b0da7e&rid=giphy.gif&ct=g');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://media2.giphy.com/media/GMKSiOWWSyRv1P0G0s/giphy.gif?cid=790b76117872dd4d66aab9bcec13817a9ce1043478fbcc59&rid=giphy.gif&ct=g');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://66.media.tumblr.com/ec902eca6ef176851823e29314d56ede/f90bf85c8b66de71-3a/s400x600/419ad07f433f14b8851af32ecedc2ea0f64e1a18.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://media4.giphy.com/media/lnPEWRyHHQhKuFsNLo/giphy.gif?cid=790b76115514496b47f0100da633cdce8e29f904cea6f308&rid=giphy.gif&ct=g');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://c.tenor.com/ooA0qXfBTUEAAAAM/dog-tiktok.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://64.media.tumblr.com/6407088ae4b520c36b0ca6f06cdbf8e3/7e615472c8228ae9-ba/s400x600/dba5fd9c77b1dd419a6bbe6c3ac73357ce7eebb8.gifv');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>

            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://media4.giphy.com/media/lnPEWRyHHQhKuFsNLo/giphy.gif?cid=790b76115514496b47f0100da633cdce8e29f904cea6f308&rid=giphy.gif&ct=g');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://c.tenor.com/ooA0qXfBTUEAAAAM/dog-tiktok.gif');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
    
            <div class="relative w-full h-60 bg-cover bg-center bg-no-repeat" style="background-image: url('https://64.media.tumblr.com/6407088ae4b520c36b0ca6f06cdbf8e3/7e615472c8228ae9-ba/s400x600/dba5fd9c77b1dd419a6bbe6c3ac73357ce7eebb8.gifv');">
                <!-- small player with views -->
                <div class="absolute bottom-1 left-1 flex gap-1 text-white text-xs items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>800</span>
                </div>
                <!-- small player with views end -->
            </div>
        </div>
    </div>
    @include('home.menuBottom')
  </main>
</body>
</html>