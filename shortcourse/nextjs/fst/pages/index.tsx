// import Head from 'next/head'
// import Image from 'next/image'
// import { Inter } from '@next/font/google'
// import styles from '@/styles/Home.module.css'

import { useWordstore } from "@/store/addword";
import { useCounterstore } from "@/store/counter";
import Link from "next/link";
import { useState } from "react";
import Counter from "./Counter";

// const inter = Inter({ subsets: ['latin'] })

// export default function Home() {
//   const p = '/page2'
//   return (
//     <>
//       <Link href={`${p}`}>
//         <h1>Sornpat</h1>
//       </Link>
//     </>
//   )
// }

// export default function Home() {
//   const [count,setcount] = useState<number>(0)
  
//   const autoIncrement = () => {setcount (count+1)}
//   return (
//     <>
//       <label>{count}</label><br></br>
//       <button type="button" onClick={autoIncrement} >
//         <h1>Sornpat</h1>
//       </button>
//     </>
//   )
// }

// export default function Home() {
//     const [count,setcount] = useState<number>(0)
//     const [words,setword] = useState<string[]>([])
    
//     const autoIncrement = () => {setcount (count+1)}


//     const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo';
//     const charactersLength = characters.length;
//     const addRandomWord = () => {const tmp = words.slice();tmp.push(characters.charAt(Math.floor(Math.random() * charactersLength)));setword(tmp)}
//     return (
//       <>
//         <label>{count}</label><br></br>
//         <button type="button" onClick={autoIncrement} >
//           <h1>Counter</h1>
//         </button>
//         <br></br>
//         <label>{words}</label><br></br>
//         <button type="button" onClick={addRandomWord} >
//           <h1>Gen Word</h1>
//         </button>
//       </>
//     )
//   }
// export default function Home() {
//       const [count,setcount] = useState<number>(0)
//       const [words,setword] = useState<string[]>([])
//       const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
//       const charactersLength = characters.length;
//       const addRandomWord = () => {setcount (count+1);const tmp = words.slice();tmp.push(characters.charAt(Math.floor(Math.random() * charactersLength)));setword(tmp)}
      
//       return (
//         <>
//           <Counter count={count}/><br></br>
//           <label>{words}</label><br></br>
//           <button type="button" onClick={addRandomWord} >
//             <h1>Gen Word</h1>
//           </button>
//         </>
//       )
//     }

export default function Home() {
  const counterstore = useCounterstore();
  const wordStore = useWordstore();

  const handleButtonClick = () => {
    counterstore.autoIncrement();
    wordStore.autoWord();
  };

  return (
    <>
      <div>{counterstore.count}</div>
      <br></br>
      <div>{wordStore.words}</div>
      <button type="button" onClick={handleButtonClick}>
        <h1>Gen Word</h1>
      </button>
    </>
  )
}