<style>
     .sidebar {
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #0091B1;
          position: fixed;
          height: 100%;
          overflow: auto;
     }

     .sidebar a {
          display: block;
          color: #fff;
          padding: 8px;
          text-decoration: none;
          display: flex;
          align-items: center;
          font-size: 12px;
     }

     .sidebar a img {
          width: 15px;
          height: 15px;
          margin-right: 5px;
          
     }

     .sidebar a.active {
          background:#E5EA00;
          color: white;
          transition: 2s;
     }

     .sidebar a:hover:not(.active) {
          background:#E5EA00;
          color: #FA8316;
          margin-left: 2%;
          transition: 1s;     
     }
     @media screen and (max-width: 700px) {
               .sidebar {
                    width: 100%;
                    height: auto;
                    position: relative;
               }

               .sidebar a {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                   
               }
          }

          @media screen and (max-width: 400px) {
               .sidebar a {
                    text-align: center;
                    float: none;
               }
          }
</style>

<div class="sidebar">
     <a  href="{{Route('home')}}" >
          <img src="{{URL::asset('img/home.png')}}" alt="/">Accueil
     </a>
     <a href="{{Route('admin.user.index')}}" class="active mt-5">
          <img src="{{URL::asset('img/users.png')}}" alt=""> User</a>
</div>
