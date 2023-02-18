import { create } from 'zustand'

// interface IWordstore{
//     words:String
//     autoword:() => void 
// }

// export const useWordstore = create<IWordstore>(set=>{
//     return{
//         words:"",
//         autoIncrement:() => 
//             set((state) => {
//                 const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
//                 const charactersLength = characters.length;

//                 const tmp = state.words.slice();
                
//                 tmp.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
//                 return{words: tmp}
//             })
//     }
// })

interface IWordstore {
        words: string[];
        autoWord: () => void;
    }
  
export const useWordstore = create<IWordstore>((set) => ({
words: [],
autoWord: () =>
    set((state: IWordstore) => {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        const charactersLength = characters.length;
        const newWord = characters.charAt(Math.floor(Math.random() * charactersLength));
        const updatedWords = [...state.words, newWord];
        return { ...state, words: updatedWords };
    }),
}));
  
