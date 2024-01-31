CREATE TABLE tx_myextproduct_domain_model_produkt (
	name varchar(255) NOT NULL DEFAULT '',
	description text,
	image int(11) unsigned NOT NULL DEFAULT '0',
	teaser text NOT NULL DEFAULT '',
	gewicht double(11,2) NOT NULL DEFAULT '0.00',
	farbe int(11) DEFAULT '0' NOT NULL,
	category int(11) unsigned DEFAULT '0'
);

CREATE TABLE tx_myextproduct_domain_model_category (
	name varchar(255) NOT NULL DEFAULT ''
);
