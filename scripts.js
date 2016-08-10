		
//TABS
	var tabContents = $(".tab_content").hide(), 
	    tabs = $("ul.tabs li");
	
	tabs.first().addClass("active").show();
	tabContents.first().show();
	
	tabs.click(function() {
	    var $this = $(this), 
	        activeTab = $this.find('a').attr('href');
	    
	    if(!$this.hasClass('active')){
	        $this.addClass('active').siblings().removeClass('active');
	        tabContents.hide().filter(activeTab).fadeIn();
	    }
	    return false;
	});	


//TABS2
	var tabContents2 = $(".tab_content2").hide(), 
	    tabs2 = $("ul.tabs2 li");
	
	tabs2.first().addClass("active").show();
	tabContents2.first().show();
	
	tabs2.click(function() {
	    var $this = $(this), 
	        activeTab = $this.find('a').attr('href');
	    
	    if(!$this.hasClass('active')){
	        $this.addClass('active').siblings().removeClass('active');
	        tabContents2.hide().filter(activeTab).fadeIn();
	    }
	    return false;
	});	