<div {{ $attributes }}>
   <ul class="sidebar-panel-nav">
      <li>
         <a href="#home">Home</a>
      </li>
      <li>
         <a href="#about">Profile</a>
      </li>
      <li>
         <a href="#contact">Contact</a>
      </li>
      <li>
         <a href=""> {{ Str::of($title)->upper() }}</a>
      </li>
   </ul>
</div>