
CREATE TABLE `categories` (
    `id` int(11) NOT NULL ,
    `name` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `jobs` (
    `id` int(11) NOT NULL ,
    `category_id` int(255) NOT NULL ,
    `company` varchar(255) NOT NULL ,
    `job_title` varchar(255) NOT NULL ,
    `description` varchar(255) NOT NULL ,
    `salary` varchar(255) NOT NULL ,
    `location` varchar(255) NOT NULL ,
    `contact_user` varchar(255) NOT NULL ,
    `contact_email` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    ALTER TABLE `categories` 
        ADD PRIMARY KEY  (`id`);

    ALTER TABLE `jobs`
        ADD PRIMARY KEY (`id`);

    ALTER TABLE `categories`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
    
    ALTER TABLE `jobs`
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
