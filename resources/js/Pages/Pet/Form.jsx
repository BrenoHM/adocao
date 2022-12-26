import PrimaryButton from '@/Components/PrimaryButton';
import { InertiaLink } from '@inertiajs/inertia-react';
import InputMask from 'react-input-mask';

export default function Form({breeds, submit, onChangeField, errors, processing, data, action}) {
    return(
        <form className="w-full max-w-2xl" onSubmit={submit} encType="multipart/form-data">
            <div className="flex flex-wrap -mx-3 mb-6">
                <div className="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label className="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" htmlFor="name">
                        Nome
                    </label>
                    <input
                        className={`appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white ${errors.name && 'border-red-500'}`}
                        id="name"
                        type="text"
                        placeholder="Bob"
                        onChange={e => onChangeField('name', e.target.value)}
                        value={data?.name}
                    />
                    {errors.name && <p className="text-red-500 text-xs italic">{errors.name}</p>}
                </div>
                <div className="w-full md:w-1/2 px-3">
                    <label className="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" htmlFor="breed_id">
                        Raça
                    </label>
                    <select
                        className={`block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 ${errors.breed_id && 'border-red-500'}`}
                        id="breed_id"
                        onChange={e => onChangeField('breed_id', e.target.value)}
                        value={data?.breed_id}>
                        <option>Selecione</option>
                        { breeds.map(breed => (
                            <option value={breed.id} key={breed.id}>{breed.breed}</option>
                        ))}
                    </select>
                    {errors.breed_id && <p className="text-red-500 text-xs italic">{errors.breed_id}</p>}
                </div>
            </div>
            <div className="flex flex-wrap -mx-3 mb-6">
                <div className="w-full md:w-1/2 px-3">
                    <label className="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" htmlFor="color">
                        Cor
                    </label>
                    <select
                        className={`block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 mb-3 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 ${errors.color && 'border-red-500'}`}
                        id="color"
                        onChange={e => onChangeField('color', e.target.value)}
                        value={data?.color}>
                            <option value="">Selecione</option>
                            <option>Amarelo</option>
                            <option>Chocolate</option>
                            <option>Branco</option>
                            <option>Preto</option>
                            <option>Cinzento</option>
                            <option>Dourado</option>
                            <option>Creme</option>
                            <option>Azul</option>
                            <option>Vermelho</option>
                    </select>
                    {errors.color && <p className="text-red-500 text-xs italic">{errors.color}</p>}
                </div>
                <div className="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label className="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" htmlFor="phone">
                        Telefone
                    </label>
                    <InputMask
                        mask="(99) 99999-9999"
                        maskChar={null}
                        className={`appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white ${errors.phone && 'border-red-500'}`}
                        id="phone"
                        type="text"
                        placeholder="(99) 99999-9999"
                        onChange={e => onChangeField('phone', e.target.value)}
                        value={data?.phone}
                    />
                    {errors.phone && <p className="text-red-500 text-xs italic">{errors.phone}</p>}
                </div>
            </div>
            <div className="flex flex-wrap -mx-3 mb-6">
                <div className="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label className="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" htmlFor="birthday">
                        Data
                    </label>
                    <input
                        className={`appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white ${errors.birthday && 'border-red-500'}`}
                        id="birthday"
                        type="date"
                        onChange={e => onChangeField('birthday', e.target.value)}
                        value={data?.birthday}
                    />
                    {errors.birthday && <p className="text-red-500 text-xs italic">{errors.birthday}</p>}
                </div>
                <div className="w-full md:w-1/2 px-3">
                    <label className="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" htmlFor="photo">
                        Foto
                    </label>
                    <input
                        className={`appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white ${errors.photo && 'border-red-500'}`}
                        id="photo"
                        type="file"
                        onChange={e => onChangeField('photo', e.target.files[0])}
                    />
                    {errors.photo && <p className="text-red-500 text-xs italic">{errors.photo}</p>}
                </div>
            </div>
            <div className="flex flex-wrap -mx-3 mb-6">
                <div className="w-full px-3 mb-6 md:mb-0">
                    <label className="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" htmlFor="description">
                        Observação
                    </label>
                    <textarea
                        className={`appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white`}
                        id="description"
                        type="text"
                        placeholder="Uma breve observação"
                        onChange={e => onChangeField('description', e.target.value)}
                        value={data?.description}
                    />
                </div>
            </div>
            <div className="text-center">
                <PrimaryButton className="mr-2" processing={processing}>{action ?? 'Salvar'}</PrimaryButton>
                <InertiaLink href={route('pet.index')} className="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Cancelar</InertiaLink>
            </div>
        </form>
    )
}