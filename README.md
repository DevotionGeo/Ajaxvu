Ajaxvu - Codeigniter Full Ajax View Library
======

Version: 0.1

This library for Codeigniter lets you build full ajax websites using codeigniter views and parser library with template based. All pages will access by ajax requests if browser supports ajax technology.
If user type url in browser request execute by PHP and if user click on a Ajaxvu link request get by Ajax.

## Requirements
* jQuery framework
* Codeigniter 1.7.0+

## Installation
1. Download ZIP.
2. Copy the `Ajaxvu.php` to your application/libraries/ folder.
3. Copy the `tamplate.php` to your application/views/ folder.
4. Copy the `ajaxvu.js` to ./js/ folder.

## Usage
  
#### Controller
The `title` is the page title and `content` is the content of website.

  ```
  $this->load->library('ajaxvu');
  
  $output['title'] = 'Foo Page Title';
  $output['content'] = $this->load->view('foo', NULL, TRUE);
	
  $this->ajaxvu->view('template', $output);
	
  ```
  
#### View
Add `class="ajaxvu"` to website links.





