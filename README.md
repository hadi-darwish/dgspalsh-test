# dgsplash-test

<p>You are asked to develop a simple contact us page:</p>

<ul>
			<li>
				<span>First Create a new database, and run the below query.</span><br>
				<span style="margin-left:8px;">DROP TABLE IF EXISTS `forms`;</span><br>
				<span style="margin-left:8px;">CREATE TABLE IF NOT EXISTS `forms` (</span><br>
				<span style="margin-left:15px;">`id` int unsigned NOT NULL AUTO_INCREMENT,</span><br>
				<span style="margin-left:15px;">`first_name` varchar(256) NOT NULL,</span><br>
				<span style="margin-left:15px;">`last_name` varchar(256) NOT NULL,</span><br>
				<span style="margin-left:15px;">`email` varchar(256) NOT NULL,</span><br>
				<span style="margin-left:15px;">`mobile` varchar(256) DEFAULT NULL,</span><br>
				<span style="margin-left:15px;">`gender` enum('Male','Female','Other') NOT NULL,</span><br>
				<span style="margin-left:15px;">`country` varchar(256) NOT NULL,</span><br>
				<span style="margin-left:15px;">`subject` varchar(256) NOT NULL,</span><br>
				<span style="margin-left:15px;">`message` text NOT NULL,</span><br>
				<span style="margin-left:15px;">`created_on` timestamp NOT NULL,</span><br>
				<span style="margin-left:15px;">PRIMARY KEY (`id`)</span><br>
				<span style="margin-left:8px;">) ENGINE=InnoDB DEFAULT CHARSET=utf8;</span><br>
			</li>
			<li>Then create a new PHP class <span class="highlight">Database</span> to handle to Database Connection, and running queries.</li>
			<li>After that, create a new PHP class <span class="highlight">Forms</span> to handle saving the data into the database. This class should use the class <span class="highlight">Database</span> to connect to the Database.</li>
			<li>
				<span>Now we are ready to work on the FrontEnd side. The form will have the below fields:</span>
				<ul>
					<li>First Name <span class="highlight">Input - Required</span></li>
					<li>Last Name <span class="highlight">Input - Required</span></li>
					<li>Email <span class="highlight">Input - Required - Validate that it's a Valid Email</span></li>
					<li>Mobile <span class="highlight">Input - Optional - Validate that it's a Valid Mobile if provided</span></li>
					<li>Gender <span class="highlight">Radio - Required - Options: Male, Female, Other</span></li>
					<li>Country <span class="highlight">Dropdown List - Required - Options: Empty, Lebanon, UAE, Qatar, Dubai</span></li>
					<li>Subject <span class="highlight">Input - Required</span></li>
					<li>Message <span class="highlight">Textarea - Required</span></li>
				</ul>
			</li>
			<li>
				<span>To save the data from the form we can use one of the below methods:</span>
				<ul>
					<li>When the form is submitted, grab the fubmitted data and directly pass them to the PHP function.</li>
					<li>Create an API layer on the BackEnd, and call the API when the form is submitted.</li>
				</ul>
			</li>
		</ul>

create a database that is named dgsplashdb in mysql

place backend folder in htdcos xammp folder
