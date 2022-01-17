<template>
  <div>
  <h2 class="text-xl text-center bg-indigo-300 p-2">SNS共有</h2>
  <ul class="flex gap-2 items-center justify-center mt-5">
    <li><img :src="'/icons/twitter-icon.png'" alt="twitter" class="w-10 h-10"></li>
    <li><img :src="'/icons/facebook-icon.png'" alt="facebook" class="w-10 h-10"></li>
    <li><img :src="'/icons/line-icon.png'" alt="line" class="w-10 h-10"></li>
  </ul>

  <h2 class="text-xl text-center bg-indigo-300 p-2 mt-5">キーワード集</h2>
  <div class="flex gap-3 text-lg items-center justify-start mt-5 px-3 flex-wrap font-initial">
    <router-link :to="{ name: 'keyword', query: { initial: 'A' } }" class="text-blue-500 hover:underline">A</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'B' } }" class="text-blue-500 hover:underline">B</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'C' } }" class="text-blue-500 hover:underline">C</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'D' } }" class="text-blue-500 hover:underline">D</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'E' } }" class="text-blue-500 hover:underline">E</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'F' } }" class="text-blue-500 hover:underline">F</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'G' } }" class="text-blue-500 hover:underline">G</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'H' } }" class="text-blue-500 hover:underline">H</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'I' } }" class="text-blue-500 hover:underline">I</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'J' } }" class="text-blue-500 hover:underline">J</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'K' } }" class="text-blue-500 hover:underline">K</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'L' } }" class="text-blue-500 hover:underline">L</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'M' } }" class="text-blue-500 hover:underline">M</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'N' } }" class="text-blue-500 hover:underline">N</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'O' } }" class="text-blue-500 hover:underline">O</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'P' } }" class="text-blue-500 hover:underline">P</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'Q' } }" class="text-blue-500 hover:underline">Q</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'R' } }" class="text-blue-500 hover:underline">R</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'S' } }" class="text-blue-500 hover:underline">S</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'T' } }" class="text-blue-500 hover:underline">T</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'U' } }" class="text-blue-500 hover:underline">U</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'V' } }" class="text-blue-500 hover:underline">V</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'W' } }" class="text-blue-500 hover:underline">W</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'X' } }" class="text-blue-500 hover:underline">X</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'Y' } }" class="text-blue-500 hover:underline">Y</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'Z' } }" class="text-blue-500 hover:underline">Z</router-link>
  </div>
  <div class="flex gap-3 text-lg items-center justify-start mt-3 px-3 flex-wrap font-initial">
    <router-link :to="{ name: 'keyword', query: { initial: 'あ' } }" class="text-blue-500 hover:underline">あ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'い' } }" class="text-blue-500 hover:underline">い</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'う' } }" class="text-blue-500 hover:underline">う</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'え' } }" class="text-blue-500 hover:underline">え</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'お' } }" class="text-blue-500 hover:underline">お</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'か' } }" class="text-blue-500 hover:underline">か</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'き' } }" class="text-blue-500 hover:underline">き</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'く' } }" class="text-blue-500 hover:underline">く</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'け' } }" class="text-blue-500 hover:underline">け</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'こ' } }" class="text-blue-500 hover:underline">こ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'さ' } }" class="text-blue-500 hover:underline">さ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'し' } }" class="text-blue-500 hover:underline">し</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'す' } }" class="text-blue-500 hover:underline">す</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'せ' } }" class="text-blue-500 hover:underline">せ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'そ' } }" class="text-blue-500 hover:underline">そ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'た' } }" class="text-blue-500 hover:underline">た</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ち' } }" class="text-blue-500 hover:underline">ち</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'つ' } }" class="text-blue-500 hover:underline">つ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'て' } }" class="text-blue-500 hover:underline">て</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'と' } }" class="text-blue-500 hover:underline">と</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'な' } }" class="text-blue-500 hover:underline">な</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'に' } }" class="text-blue-500 hover:underline">に</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ぬ' } }" class="text-blue-500 hover:underline">ぬ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ね' } }" class="text-blue-500 hover:underline">ね</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'の' } }" class="text-blue-500 hover:underline">の</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'は' } }" class="text-blue-500 hover:underline">は</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ひ' } }" class="text-blue-500 hover:underline">ひ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ふ' } }" class="text-blue-500 hover:underline">ふ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'へ' } }" class="text-blue-500 hover:underline">へ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ほ' } }" class="text-blue-500 hover:underline">ほ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ま' } }" class="text-blue-500 hover:underline">ま</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'み' } }" class="text-blue-500 hover:underline">み</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'む' } }" class="text-blue-500 hover:underline">む</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'め' } }" class="text-blue-500 hover:underline">め</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ら' } }" class="text-blue-500 hover:underline">ら</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'り' } }" class="text-blue-500 hover:underline">り</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'る' } }" class="text-blue-500 hover:underline">る</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'れ' } }" class="text-blue-500 hover:underline">れ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'や' } }" class="text-blue-500 hover:underline">や</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'ゆ' } }" class="text-blue-500 hover:underline">ゆ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'よ' } }" class="text-blue-500 hover:underline">よ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'わ' } }" class="text-blue-500 hover:underline">わ</router-link>
    <router-link :to="{ name: 'keyword', query: { initial: 'を' } }" class="text-blue-500 hover:underline">を</router-link>
  </div>

  </div>
</template>

<script>
export default {
  setup() {

  },
}
</script>
