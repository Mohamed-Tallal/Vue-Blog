<template>

    <!-- Header -->
    <header >
      <nav class="navbar navbar-expand-lg">
        <div class="container">
           <router-link class="navbar-brand" to="/"><h2>Stand Blog<em>.</em></h2></router-link>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <router-link class="nav-link" to="/">Home
                  <span class="sr-only">(current)</span>
                </router-link>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog Entries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post-details.html">Post Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

</template>

