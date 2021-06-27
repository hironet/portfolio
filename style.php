body {
  padding-top: 2rem;
}

#nav {
  opacity: 0.9;
}

h2.skill-class {
  font-size: 1.2rem;
  text-decoration: underline;
}

/* ページトップに戻るボタン */
button#page-top {
  /* buttonタグのリセットCSS */
  appearance: none;
  border: none;
  cursor: pointer;
  outline: none;
  padding: 0;

  /* ボタンの装飾 */
  align-items: center;
  background-color: #212529;
  border-radius: 50%;
  bottom: 15px;
  display: flex;
  height: 50px;
  justify-content: center;
  opacity: 0.7;
  position: fixed;
  right: 15px;
  transition: all 0.3s ease;
  width: 50px;
  z-index: 100;
}

/* ページトップに戻るボタン：矢印 */
button#page-top::before {
  border-right: solid 3px #fff;
  border-top: solid 3px #fff;
  content: "";
  height: 12px;
  margin-bottom: -6px;
  transform: rotate(-45deg);
  width: 12px;
}

/* ページトップに戻るボタン：ホバー時 */
button#page-top:hover {
  transform: scale(1.1);
}

div.box {
  border-radius: 8px;
  border: solid 3px;
  margin-bottom: 1rem;
  padding: 0.5rem;
  position: relative;
}
