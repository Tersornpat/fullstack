import { create } from 'zustand'

interface ICounterstore{
    count:number
    autoIncrement:() => void 
}

export const useCounterstore = create<ICounterstore>(set=>{
    return{
        count: 0,
        autoIncrement:() => 
            set((state) => {
                return{count: state.count + 1,}
            })
    }
})
