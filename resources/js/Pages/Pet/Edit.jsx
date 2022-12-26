import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/inertia-react';
import { useEffect, useState } from 'react';
import axios from 'axios';
import Form from '@/Pages/Pet/Form';

export default function Edit(props) {

    const [breeds, setBreeds] = useState([]);

    const { data, setData, post, processing, errors } = useForm({
        name: props.pet.name,
        breed_id: props.pet.breed_id,
        color: props.pet.color,
        phone: props.pet.phone,
        birthday: props.pet.birthday,
        photo: '',
        description: props.pet.description,
    });

    useEffect(() => {
        loadBreeds();
    }, []);

    const loadBreeds = async() => {
        axios.get('/breeds').then(result => {
            setBreeds(result.data);
        });
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        post(route('pet.update', props.pet.id));
    }

    const onChangeField = (field, value) => {
        setData(field, value);
    }
    
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Editar Pet</h2>}
        >
            <Head title="Editar Pet" />
            
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 flex justify-center">
                            <Form
                                breeds={breeds}
                                submit={handleSubmit}
                                onChangeField={onChangeField}
                                errors={errors}
                                processing={processing}
                                data={data}
                                action={props.action}
                            />
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
