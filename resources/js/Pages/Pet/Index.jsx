import NavLink from '@/Components/NavLink';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link, usePage } from '@inertiajs/inertia-react';
import { BsTrash } from "react-icons/bs";
import { BsPencilSquare } from "react-icons/bs";

export default function Index(props) {
    const {flash} = usePage().props

    const haldleSubmit = (e) => {
        if(!confirm('Deseja excluir?'))
        {
            e.preventDefault();
        }
    }

    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Meus Pets</h2>}
        >
            <Head title="Meus Pets" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">
                            <Link className="bg-indigo-500 rounded text-white py-1 px-2 inline-block mb-3 float-right" href={route('pet.create')}>
                                Novo Pet
                            </Link>

                            {flash.message && (
                                <div className="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 clear-both mb-3" role="alert">
                                    <p className="font-bold">Mensagem</p>
                                    <p className="text-sm">{flash.message}</p>
                                </div>
                            )}

                            <table className="border-collapse border border-slate-400 w-full rounded-md">
                                <thead>
                                    <tr>
                                        <th className="border border-slate-300">Foto</th>
                                        <th className="border border-slate-300">Nome</th>
                                        <th className="border border-slate-300">Raça</th>
                                        <th className="border border-slate-300">Cor</th>
                                        <th className="border border-slate-300">Aniversário</th>
                                        <th className="border border-slate-300">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {props.pets && props.pets.map(pet => (
                                        <tr key={pet.id}>
                                            <td className="border border-slate-300 text-center p-2">
                                                {pet.photo && (<img className='inline-block' src={`./photos/${pet.photo}`} alt={pet.name} width="100" />)}
                                            </td>
                                            <td className="border border-slate-300 p-2">{pet.name}</td>
                                            <td className="border border-slate-300 p-2">{pet.breed.breed}</td>
                                            <td className="border border-slate-300 p-2">{pet.color}</td>
                                            <td className="border border-slate-300 p-2">{new Date(pet.birthday).toISOString().substr(0, 10).split('-').reverse().join('/')}</td>
                                            <td className="border border-slate-300 text-center">
                                                <Link href={route('pet.edit', pet.id)} className="inline-block"><BsPencilSquare size={25} /></Link>
                                                <form onSubmit={haldleSubmit} className="inline-block" action={route('pet.destroy', pet.id)} method="POST">
                                                    <input type="hidden" name="_token" value={props.csrf} />
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <button><BsTrash size={25} /></button>
                                                </form>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
