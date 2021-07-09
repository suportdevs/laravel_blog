// Owl Carousel Start..................
$(document).ready(function() {
    var one = $("#one");
    var two = $("#two");

    $('#customNextBtn').click(function() {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function() {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    two.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

});

// Owl Carousel End..................

$("#contactSendBtn").click(function(){
    var name = $("#contactNameId").val();
    var mobile = $("#contactMobileId").val();
    var email = $("#contactEmailId").val();
    var msg = $("#contactMsgId").val();
    SendContact(name, mobile, email, msg);
});

// Contact Form and Axios..................
function SendContact(contactName, contactMobile,contactEmail,contactMsg){
    if(contactName.length == 0){
        $("#contactSendBtn").html("আপনার নাম লিখুন");
        setTimeout(function() {
            $("#contactSendBtn").html("পাঠিয়ে দিন ");
        }, 2000);
    } else if(contactName.length == 0){
        $("#contactSendBtn").html("আপনার মোবাইল নং লিখুন");
        setTimeout(function() {
            $("#contactSendBtn").html("পাঠিয়ে দিন ");
        }, 2000);
    } else if(contactName.length == 0){
        $("#contactSendBtn").html("আপনার ইমেইল লিখুন");
        setTimeout(function() {
            $("#contactSendBtn").html("পাঠিয়ে দিন ");
        }, 2000);
    } else if(contactName.length == 0){
        $("#contactSendBtn").html("আপনার মেসেজ লিখুন");
        setTimeout(function() {
            $("#contactSendBtn").html("পাঠিয়ে দিন ");
        }, 2000);
    } else {
        axios.post('/ContactSend', {
            contact_name:   contactName,
            contact_mobile: contactMobile,
            contact_email:  contactEmail,
            contact_msg:    contactMsg,
        })
        .then(function(response){
            if(response.status == 200){
                if(response.data == 1){
                    $("#contactSendBtn").html("আপনার মেসেজ সফলভাবে পাঠানো হয়েছে");
                    setTimeout(function() {
                        $("#contactSendBtn").html("পাঠিয়ে দিন ");
                    }, 3000);
                } else {
                    $("#contactSendBtn").html("আপনার মেসেজ পাঠানো হয়নি");
                    setTimeout(function() {
                        $("#contactSendBtn").html("পাঠিয়ে দিন ");
                    }, 3000);
                }
            }else{
                $("#contactSendBtn").html("আপনার মেসেজ পাঠানো হয়নি");
                setTimeout(function() {
                    $("#contactSendBtn").html("পাঠিয়ে দিন ");
                }, 3000);
            }
        })
        .catch(function(error){
            $("#contactSendBtn").html("আপনার মেসেজ পাঠানো হয়নি");
            setTimeout(function() {
                $("#contactSendBtn").html("পাঠিয়ে দিন ");
            }, 3000);
        });
    }
}
// Contact Form and Axios End..............

