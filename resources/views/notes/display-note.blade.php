<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Notes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .note-rating i {
            cursor: pointer;
        }
        .star-filled {
            color: gold; /* Change to the color you want the filled star to be */
        }
        .user-info{
            margin-top:10px;
            margin-left:16px;
            
        }
        .user-info .fa-solid.fa-user {
          
            margin-top:22px;
            vertical-align: top;
        }
        .user-info .fa-solid fa-user{
            margin-bottom:2px;
        }
        .user-info p{
        display: inline-block;
    
        }
        .user-info i{ 
            margin-right:3px;
        }
        .user-info .user-name{
            
            font-size:20px;
            margin-right:3px;
        }
        
        .note-actions{
            margin-right:16px;
        }
       .note-actions i{
            margin-left:8px;
        }

        .note-published-at{
            color:#ccc;
            font-size:12px;
            font-weight: bold;
        }
        .note-container{
            display: flex;
            justify-content: space-between; /* Distributes child elements evenly along the main axis */
            align-items: center;
            margin-top:-7px;
            
        }
        .note{
            height:400px;
            width:520px;
        }
        .note-rating{
            /* margin-right:-350px; */
        }
        .note-details{
            margin-top:20px;
            margin-bottom:10px;
            margin-left:30px;
        }
        .note-title{
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            font-size: 20px;
            
        }
        .note-details .note-title{
           
            margin-top:-10px;
        }
        hr{
            width:350px;
            background-color:#DCDCDC;
            height:1px;
            border:none;
        }
        .note:nth-child(3n+1) {
            background-color: #91aaff;
        }
        .note:nth-child(3n+2) {
            background-color: #ff80c5;
        }
        .note:nth-child(3n+3) {
            background-color: #7afbff;
        }
        #notes-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            
        }
        .add-note-btn {
            display: flex; /* Use flexbox */
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
            width: 40px;
            height: 40px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 24px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .more-details{
            display:flex;
            justify-content: space-between;
            margin-left: 16px;
            margin-right: 16px;
            margin-top: 140px;
        }
        .more-details i{
            font-size: 25px;
        }
        .image-container{
           
        }
        .see-more-button {
    
         
            color: black; /* Change text color to black */
            border: 2px solid black; /* Add border */
            border-radius: 20px; /* Add border radius */
            display: inline-flex; /* Use flexbox to ensure inline alignment */
            align-items: center; /* Align items vertically */
        }

        .see-more-button i {
            margin-left: 5px; /* Add some space between text and arrow */
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            background-color: #fff;
            border-bottom: 3px solid;
            border-image: linear-gradient(to right, #91aaff, #ff80c5, #7afbff);
            border-image-slice: 1;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            margin-left: 0px;
            height:100px;
        }
        header .logo img{
            height:100px;
            width:140px;
        }
        

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .icons {
            display: flex;
        }

        .user-icon,
        .notification-icon {
            margin-left: 20px;
            cursor: pointer;
        }

        .content {
            padding-top: 70px; /* Height of the header + 10px */
            height: 2000px; /* Just for demonstration */
        }
        
        .note-details .image-container img{
            height:500px;
            width:150px;
        }
        .image-container{
            border:bold;
        }
    

    </style>
</head>
<body>
    <header id="header">
        <div class="logo-container"><img class="logo"src="{{ asset('images/notes/LOGO.jpeg') }}"></div>
        <div class="icons">
            <div class="user-icon"><i class="fas fa-user"></i></div>
            <div class="notification-icon"><i class="fas fa-bell"></i></div>
        </div>
    </header>
    <div class="container">
    <div class="content">
        <div id="notes-container">
            @foreach($notes as $note)
                <div class="note">
                    <div class="note-container">
                        
                         <div class="user-info">
                            <i class="fa-solid fa-user"></i>
                            <p class="user-name">user name</p>
                            
                         </div>
                         
                         <div class="note-rating">
                            <i class="fa-regular fa-star" data-rating="1"></i>
                            <i class="fa-regular fa-star" data-rating="2"></i>
                            <i class="fa-regular fa-star" data-rating="3"></i>
                            <i class="fa-regular fa-star" data-rating="4"></i>
                            <i class="fa-regular fa-star" data-rating="5"></i>
                        </div>
                        <div class="note-actions">
                            <i class="fa-regular fa-floppy-disk"></i>
                            <i class="fa-solid fa-share"></i>
                            <i class="fa-solid fa-triangle-exclamation"></i>
                        </div>
                    </div>
                    <hr/>
                    <div class="note-details">
                        <h6 class="note-title">{{ $note->title }}</h3>
                        {{-- <p class="note-topic-id">Topic: {{ $note->topic->name }}</p> --}}
                        {{-- <p class="note-description">{{ $note->description }}</p> --}}
                        {{-- <p class="note-keywords">Keywords: {{ $note->keywords }}</p> --}}
                        <div class="image-container">
                            <img src="{{ asset('images/notes/1712268034.jpg') }}"/>
                            {{-- <img src="{{ asset('C:\public\storage\notes' . $note->photo) }}" alt="Image de la note:" class="img-fluid"> --}}
                        </div>
                       
                    </div>
                    <div class="more-details">
                        <i class="fa-regular fa-comment-dots " ></i>
                        {{-- <button>See More</button> --}}
                        <button class="see-more-button">
                            See More<i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
    </div>
    <a href="{{ route('notes.add') }}" id="add-note-btn" class="add-note-btn">+</a>
    
    <script src="{{ asset('js/app.js') }}"></script>
    
    
    <script>
        // JavaScript for rating functionality
        document.querySelectorAll('.note-rating i').forEach(star => {
            star.addEventListener('click', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                
                // Toggle filled class for the clicked star
                star.classList.toggle('star-filled');
            });
        });
        // JavaScript for redirecting to the add-note.blade.php page
        document.getElementById('add-note-btn').addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default link behavior
        window.location.href = event.target.getAttribute('href'); // Change the location to the desired page
        });
    </script>
</body>
</html>
