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
    <div class="relative my-5 mx-3.5 content-center">
      <!-- top navbar -->
      <div class="sticky bottom-0 left-0 bg-white w-full py-2 px-3 mt-1 text-xs">
        
        <div class="grid grid-cols-5 gap-0.5 mt-2">
    
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
        </div>

        <div class="flex justify-between items-center mb-10">
          <div class="flex flex-col items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              <span>Home</span>
          </div>
          {{-- <div class="flex flex-col items-center">
              <button class="bg-black text-white px-5 py-2 rounded-md border border-pink-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                  </svg>
              </button>
          </div> --}}
          <div class="flex flex-col items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <span>Profile</span>
          </div>
      </div>
    </div>
      {{-- <div class="flex justify-between items-center text-sm">
          <button>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
              </svg>
          </button>
          <a href="#" class="flex gap-1 items-center">
              <span class="font-bold">Geeky Gamer</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
          </a>
          <div class="flex gap-2">
              <button>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
              </button>
              <button>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
              </button>
          </div>
      </div> --}}
      <!-- top navbar end -->
  
      <!-- top header -->
      {{-- <div class="flex flex-col justify-center items-center my-5">
          <div class="w-16 h-16 bg-cover bg-center bg-no-repeat rounded-full" style="background-image: url('https://img.freepik.com/premium-vector/gamer-mascot-geek-boy-esports-logo-avatar-with-headphones-glasses-cartoon-character_8169-228.jpg');"></div>
          <span class="my-3">@_geeeky_gamer</span>

          <div class="flex gap-10 text-sm">
              <div class="flex flex-col items-center">
                  <span class="font-bold">10</span>
                  <span>Following</span>
              </div>
              <div class="flex flex-col items-center">
                  <span class="font-bold">1.20 K</span>
                  <span>Followers</span>
              </div>
              <div class="flex flex-col items-center">
                  <span class="font-bold">100 K</span>
                  <span>Likes</span>
              </div>
            </div>

          <button class="my-5 px-5 py-2 font-semibold text-sm border border-gray-400">Edit profile</button>

          <p class="mb-3">Description about me goes here</p>
      </div> --}}
      <!-- top header end -->


      <!-- middle navigation -->
      {{-- <div class="grid grid-cols-4">
          <button class="mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" class="border-b-2 border-gray-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
              </svg>
          </button>
          <button class="mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
          </button>
          <button class="mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
              </svg>
          </button>
          <button class="mx-auto">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
              </svg>
          </button>
      </div> --}}
      <!-- middle navigation end -->

      <!-- video grid -->
      <!-- video grid end -->

      <!-- bottom navigation -->
      
      <!-- bottom navigation end -->
  </div>
  </main>
</body>
</html>