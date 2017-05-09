<style>
.chat {
    display: block;
    width: 100%;
    height: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
    background: #eee;

    & .message {
        display: flex;
        margin: 10px 0 0 10px;
        min-height: 30px;
        height: auto;
        text-align: left;

        &.me {
            & img {
                order: 2;
                margin: 0 0 0 3px;
            }

            & div {
                order: 1;
                padding: 0 8px 0 0;
                
                & p {
                    float: right;
                }
                
                &:before {
                    position: relative;
                    float: right;
                    content: '';
                    margin: 7px -8px 0 0;
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-width: 8px 0 8px 8px;
                    border-color: transparent transparent transparent #fff;
                }
            }
        }

        & img {
            display: block;
            order: 1;
            margin: 0 10px 0 0;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            box-sizing: border-box;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
        }

        & div {
            display: block;
            flex: 1;
            order: 2;

            & p {
                display: inline-block;
                margin: 0;
                width: auto;
                padding: 8px 10px 8px 10px;
                background: #fff;
                word-wrap: break-word;
                font-family: Monospace;
                border-radius: 3px;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            }
            
            &:before {
                position: relative;
                float: left;
                content: '';
                margin: 7px 0 0 -8px;
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 8px 8px 8px 0;
                border-color: transparent #fff transparent transparent;
            }
        }
    }
}



/*
* The styles to setup this scene
*/


html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    padding: 150px 0;
    background: #9b59b6;
}

.chat {
    border-radius: 5px;
}

#device {
    margin: -50px auto 0 auto;
    padding: 20px 20px 40px 20px;
    width: 350px;
    height: 100%;
    border-radius: 10px;
    border-bottom: 5px solid darken(#34495e, 10%);
    background: #34495e;

    & #size {
        -webkit-appearance: none;
        .track;

        &::-moz-range-track {
            .track;
        }

        &::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            .thumb;
        }

        &::-moz-range-thumb {
            -moz-appearance: none;
            .thumb;
        }
    }
}

.track {
    margin: 15px 0 0 0;
    width: 100%;
    height: 10px;
    vertical-align: middle;
    border-radius: 5px;
    background-color: lighten(#34495e, 10%);
    outline: none;
}

.thumb {
    height: 20px;
    width: 20px;
    background-color: lighten(#34495e, 15%);
    border-radius: 50%;
}

#drag {
    position: absolute;
    margin: 50px 0 0 -10px;
    padding: 5px 10px;
    line-height: 20px;
    text-align: center;
    font-size: 14px;
    font-family: arial, sans-serif;
    color: #fff;
    border-radius: 5px;
    border-bottom: 2px solid darken(#3498db, 10%);
    background: #3498db;
    -webkit-touch-callout: none;
    -webkit-user-select: none;

    &:after {
        content: '';
        position: absolute;
        top: -20px;
        left: 10px;
        width: 0;
        height: 0;
        border-width: 10px;
        border-style: solid;
        border-color: transparent transparent #3498db transparent;
    }
}

#preview {
    display: none;
    margin: -100px auto 0 auto;
    padding: 0;
    width: 350px;
    height: 500px;
    
    .chat {
        background: transparent;
        overflow: hidden;
        overflow-y: hidden;
        
        #text {
            color: #fff;
            font-family: arial, sans-serif;
            font-size: 12px;
        }
    }
}

@media (max-height: 400px) {
    #device {
        display: none;
    }
    
    #preview {
        display: block;
    }
}
</style>
<script>
$('#size').hover( function () {
  $('#drag').fadeOut(500);
});

$('#size').mousemove( function () {
  $('#device').css('width', $(this).val());
});

$('#size').change(function () {
  $('#device').css('width', $(this).val());
});
</script>
<div id="device">
       
  
  <div class="chat">
    <div class="message">
      <img src="http://api.randomuser.me/portraits/med/men/66.jpg" />
      <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget pretium sapien, et gravida metus.</p></div>
    </div>
    <div class="message">
      <img src="http://api.randomuser.me/portraits/med/men/66.jpg" />
      <div><p>Aliquam gravida semper pharetra.</p></div>
    </div>
    <div class="message me">
      <img src="http://api.randomuser.me/portraits/med/women/36.jpg" />
      <div><p>
        Curabitur congue lorem quis dolor blandit hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        Vivamus bibendum efficitur tortor, non porttitor magna imperdiet in.
        </p></div>
    </div>
    <div class="message me">
      <img src="http://api.randomuser.me/portraits/med/women/36.jpg" />
      <div><p>Curabitur feugiat libero sed lacinia sollicitudin.</p></div>
    </div>
    <div class="message me">
      <img src="http://api.randomuser.me/portraits/med/women/36.jpg" />
      <div><p>Cras mollis nisl ac velit euismod ultrices.</p></div>
    </div>
    <div class="message">
      <img src="http://api.randomuser.me/portraits/med/men/66.jpg" />
      <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget pretium sapien, et gravida metus.</p></div>
    </div>
    <div class="message">
      <img src="http://api.randomuser.me/portraits/med/men/66.jpg" />
      <div><p>Aliquam gravida semper pharetra.</p></div>
    </div>
  </div>

  
  <span id="drag">Drag me!</span>
  <input id="size" type="range" min="350" max="1000" value="350" />
</div>


<!-- This is for the preview at codepen.io :) -->
<div id="preview">     
  <div class="chat">
    <div class="message">
      <img src="http://api.randomuser.me/portraits/med/men/66.jpg" />
      <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget pretium sapien, et gravida metus.</p></div>
    </div>
    <div class="message me">
      <img src="http://api.randomuser.me/portraits/med/women/36.jpg" />
      <div><p>
        Curabitur congue lorem quis dolor blandit hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        Vivamus bibendum efficitur tortor, non porttitor magna imperdiet in.
        </p></div>
    </div>
    
    <p id="text">Make you view height larger to see the full thing ;)</p>
  </div>
</div>
