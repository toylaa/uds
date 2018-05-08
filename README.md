function: create a platform where people with equipment and services can connect and do business with consumers.(think waste removal as basis)
**Just connect the two parties for now. Do not worry about tracking or mediating transactions**

database: mySQL
-	Supplier user information
o	id
o	name
o	location
o	company(if applicable)
o	email
o	contact info
o	company website url
o	picture
-	Equipment available for use
o	type of equipment(steel containers, ask him for more categories)
o	size
o	location
o	prices/rates for rental
o	user id affiliated with equipment
o	condition of equipment
o	description
o	picture
-	Services available for use
o	type of service(C&D/Construction Waste, Hazardest Waste Such As Asbestos, Human Waste from Construction Site, ask him for more categories)
o	location
o	prices/rates for rental
o	user id affiliated with equipment
o	description
o	picture
-	Pictures Table: holds pictures for all website
Business Logic:
	Searching:
o	Search by category of equipment or service
o	Optional location field
o	Search by key word
	Possibly key: value store for synonyms
o	Display all results on page
o	Have call forward number to count all times customer called supplier through our website
CRUD for Supplier:
o	Create:
	Supplier adds service or equipment to necessary table in mySQL database
o	Read:
	Supplier reads service or equipment to necessary table in mySQL database
o	Update:
	Supplier edits service or equipment from necessary table in mySQL database
o	Delete:
	Supplier deletes service or equipment from necessary table in mySQL database

Front-end:
-	Homepage = search page with different equipment and services
-	Supplier profile page:
o	Ability to add, remove, edit services and equipment
o	Edit profile info
o	Dashboard of offered services and equipment

-	About page


* Owner   - Tyler Mcdonough   tcmcd1337@gmail.com
* Copilot - Joji Jacob        jojijacob22@gmail.com