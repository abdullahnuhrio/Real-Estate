<!DOCTYPE html>
<head>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        
        <div class="properties-listing">
    

            <div class="property">
                <img src="images/home.jpg" alt="Property 1">
                <h3>Modern Family Home</h3>
                <p>3 Bedrooms | 2 Bathrooms | Garage | Garden</p>
                <p>Price: $350,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
        
            <div class="property">
                <img src="images/house1.jpg" alt="Property 2">
                <h3>Luxury Villa</h3>
                <p>5 Bedrooms | 4 Bathrooms | 2 Garages | Pool</p>
                <p>Price: $1,500,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
        
            <div class="property">
                <img src="images/house2.jpg" alt="Property 3">
                <h3>City Apartment</h3>
                <p>2 Bedrooms | 1 Bathroom | Balcony</p>
                <p>Price: $280,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>

            <div class="property">
                <img src="images/house3.jpg" alt="Property 1">
                <h3>Modern Family Home</h3>
                <p>3 Bedrooms | 2 Bathrooms | Garage | Garden</p>
                <p>Price: $350,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
        
            <div class="property">
                <img src="images/house4.jpg" alt="Property 2">
                <h3>Luxury Villa</h3>
                <p>5 Bedrooms | 4 Bathrooms | 2 Garages | Pool</p>
                <p>Price: $1,500,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
        
            <div class="property">
                <img src="images/house5.jpg" alt="Property 3">
                <h3>City Apartment</h3>
                <p>2 Bedrooms | 1 Bathroom | Balcony</p>
                <p>Price: $280,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
            <div class="property">
                <img src="images/house6.jpg" alt="Property 1">
                <h3>Modern Family Home</h3>
                <p>3 Bedrooms | 2 Bathrooms | Garage | Garden</p>
                <p>Price: $350,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
        
            <div class="property">
                <img src="images/house7.jpg" alt="Property 2">
                <h3>Luxury Villa</h3>
                <p>5 Bedrooms | 4 Bathrooms | 2 Garages | Pool</p>
                <p>Price: $1,500,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
        
            <div class="property">
                <img src="images/homepage.webp" alt="Property 3">
                <h3>City Apartment</h3>
                <p>2 Bedrooms | 1 Bathroom | Balcony</p>
                <p>Price: $280,000</p>
                <button>View Property</button>
                <button class="dlt">Delete Listing</button>
            </div>
            </div>
        
<style>
    

    .properties-listing {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    flex-wrap: wrap;  /* this ensures the properties stack on smaller screens */
}

.property {
    flex-basis: calc(33.33% - 20px); /* Divide by three minus spacing */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
    margin: 10px;
    transition: transform 0.3s;
}

.property:hover {
    transform: scale(1.05); /* A simple zoom effect on hover */
}

.property img {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
}

.property h3 {
    background-color: #007BFF;
    color: white;
    text-align: center;
    margin: 0;
    padding: 10px;
}

.property p {
    padding: 0 10px 10px;
}


    
button {
   margin-left: 35%;
   margin-bottom: 10%;

    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3; /* a darker blue shade */
}

    
.dlt{
   margin-left: 28%;
   margin-top: -20%;

    padding: 20px 50px;
    background-color: red;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s;
}

.dlt:hover {
    background-color: rgb(196, 82, 82); /* a darker blue shade */
}




</style>


        </body>

        </html>