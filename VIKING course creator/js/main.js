const burger = document.querySelector('.toggel-btn');
const nav = document.querySelector('.justify');

        console.log(burger)
        burger.addEventListener('click', () => {
          nav.classList.toggle('show');
          if (nav.matches('.show')) {
            nav.classList.remove("end")
             nav.style.setProperty("display", "flex", "important");
          }
          else {
             nav.classList.add("end")
             setTimeout(() => {
              nav.style
              .setProperty("display", "none", "important");
             }, 1000);
          }
        });

        const navLinks = document.querySelectorAll(".justify a");
        const logo = document.querySelector(".logo");
        navLinks.forEach(n => {
          n.addEventListener("click", () => {
            nav.classList.toggle("show");
              if (nav.classList.toggle("show")) {
              nav.classList.toggle("show");
              nav.style.setProperty("display", "none", "important");
            }
          })
        });
          logo.addEventListener("click", () => {
            nav.classList.toggle("show");
              if (nav.classList.toggle("show")) {
              nav.classList.toggle("show");
              nav.style.setProperty("display", "none", "important");
            }
          });

          
const hidedText = document.querySelector('.hided-text');
const seeMore = document.querySelector('.see-more');

if(seeMore != null) {
  seeMore.addEventListener('click', () => {
    hidedText.classList.toggle('show-text')
  });
}



const LoginDialog = document.querySelector('.modal-backdrop');
const LoginBtn = document.querySelector('.login-btn');
const CloseBtn = document.querySelector('.close-icon');

console.log("Login btn:");
console.log(LoginBtn)
  LoginBtn.addEventListener('click', () => {
    LoginDialog.classList.toggle('show-login');
      if (LoginDialog.matches('.show-login')) {
        LoginDialog.classList.remove("show-login-end")
        LoginDialog.style.setProperty("display", "flex", "important");
      }
    });

console.log(CloseBtn)
CloseBtn.addEventListener('click', () => {
  LoginDialog.classList.toggle('show-login');
    if (LoginDialog.matches('.show-login')) {
      LoginDialog.classList.remove("show-login-end")
      LoginDialog.style.setProperty("display", "flex", "important");
    }
    else {
      LoginDialog.classList.add("show-login-end")
      setTimeout(() => {
        LoginDialog.style
        .setProperty("display", "none", "important");
      },);
    }
  });



const SignUpDialog = document.querySelector('.modal-backdrop-sigUp');
const SignUpBtn = document.querySelector('.SignUp-btn');
const SignUpCloseBtn = document.querySelector('.close-icon-SignUp');


SignUpBtn.addEventListener('click', () => {
  SignUpDialog.classList.toggle('show-login');
    if (SignUpDialog.matches('.show-login')) {
      SignUpDialog.classList.remove("show-login-end")
      SignUpDialog.style.setProperty("display", "flex", "important");
    }
  });

  console.log(SignUpCloseBtn)
  SignUpCloseBtn.addEventListener('click', () => {
    SignUpDialog.classList.toggle('show-login');
      if (SignUpDialog.matches('.show-login')) {
        SignUpDialog.classList.remove("show-login-end")
        SignUpDialog.style.setProperty("display", "flex", "important");
      }
      else {
        SignUpDialog.classList.add("show-login-end")
        setTimeout(() => {
          SignUpDialog.style
          .setProperty("display", "none", "important");
        },);
      }
    });

const BuyNowCTA = document.querySelector('.page-buy-now-cta-btn');

  console.log(BuyNowCTA)
    BuyNowCTA.addEventListener('click', () => {
      LoginDialog.classList.toggle('show-login');
        if (LoginDialog.matches('.show-login')) {
          LoginDialog.classList.remove("show-login-end")
          LoginDialog.style.setProperty("display", "flex", "important");
        }
      });